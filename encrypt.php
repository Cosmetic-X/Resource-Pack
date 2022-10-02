<?php
require_once (is_dir(dirname(__DIR__) . "/Backend") ? __DIR__ . "/vendor/autoload.php" : dirname(__DIR__, 2) . "/vendor/autoload.php");
// TODO: use aes cipher to encrypt the pack
/*
```go
// decrypt using cfb with segmentsize = 1
func cfb_decrypt(data []byte, key []byte) ([]byte, error) {
	b, err := aes.NewCipher([]byte(key))
	if err != nil {
		return nil, err
	}

	shift_register := append(key[:16], data...) // prefill with iv + cipherdata
	_tmp := make([]byte, 16)
	off := 0
	for off < len(data) {
		b.Encrypt(_tmp, shift_register)
		data[off] ^= _tmp[0]
		shift_register = shift_register[1:]
		off++
	}
	return data, nil
}
```
`/