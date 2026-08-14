# exps

Static x86_64 exploit binaries for **authorized** shared-hosting privesc labs.

> Private repo — `enesbatursunger` only. Agent uploads here; target pulls via `wget` raw URL.

## Binaries

| File | CVE / name | Notes |
|------|------------|-------|
| `bin/dirtydecrypt` | rxrpc pagecache write | No AF_ALG/io_uring/unshare |
| `bin/fragnesia` | CVE-2026-46300 | Needs `unshare` + esp4 |
| `bin/skb_segment_exploit` | Fragnesia bypass | veth + 3 netns |
| `bin/copy-fail` | CVE-2026-31431 | musl static (reference) |
| `bin/copy-fail-passwd` | Copy Fail variant | targets passwd |

## Raw URLs (main branch)

```
https://raw.githubusercontent.com/enesbatursunger/exps/main/bin/dirtydecrypt
https://raw.githubusercontent.com/enesbatursunger/exps/main/bin/fragnesia
https://raw.githubusercontent.com/enesbatursunger/exps/main/bin/skb_segment_exploit
https://raw.githubusercontent.com/enesbatursunger/exps/main/bin/copy-fail
```

## Build (local / CI)

```bash
./build.sh
# or: docker run --rm -v $PWD:/w -w /w alpine:3.20 sh -c "apk add gcc musl-dev make linux-headers && ./build.sh"
```

Sources in `src/` from [v12-security/pocs](https://github.com/v12-security/pocs).
