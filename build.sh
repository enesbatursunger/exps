#!/bin/sh
# x86_64 static musl — authorized lab only
set -e
cd "$(dirname "$0")/src"
gcc -static -O2 -o ../bin/dirtydecrypt dirtydecrypt.c -lpthread
gcc -static -O2 -o ../bin/fragnesia fragnesia.c -lpthread
make -f Makefile skb_segment_exploit
mv skb_segment_exploit ../bin/
echo "OK: $(ls -la ../bin/)"
