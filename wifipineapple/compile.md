```
gcc -o cap2hccapx cap2hccapx.c
```

```
./cap2hccapx
```

```
cap2hccapx E4-6F-13-FA-AD-E0_partial.pcap  capture.hccapx
```

```
.\hashcat.exe -m 2500 .\hashes\capture.hccapx .\wordlists\rockyou.txt --force
```
