+++
title       = "My GPG Keys"
description = ""
tags        = []
categories  = []
blog        = "false"
+++

## Email Key
The following is my GPG key for email communication:

		sec   rsa4096 2017-02-04 [SC] [expires: 2017-08-03]
		      E17E AB91 1D01 BEDA B150  BBBF CAFE 9215 B58C 7C3B
		uid           [ultimate] Alexandre Pujol <alexandre@pujol.io>
		ssb   rsa4096 2017-02-04 [E] [expires: 2017-08-03]

{{< get-key "0xcafe9215b58c7c3b" "B58C7C3B" >}}

## Code Signing Key
The following key is used to sign commits, tags and releases:

		sec   rsa4096 2017-01-09 [SC]
		      06A2 6D53 1D56 C42D 6680  5049 C546 9996 F0DF 68EC
		uid           [ultimate] Alexandre Pujol (Git) <alexandre@pujol.io>

{{< get-key "0xc5469996f0df68ec" "F0DF68EC" >}}
