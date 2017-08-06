+++
title       = "My GPG Keys"
description = ""
tags        = []
categories  = []
blog        = "false"
+++

## Email Encryption Key
The following is my GPG key for email communication:

```
pub   rsa4096/0xCE0EAD7F07180C35 2017-08-06 [SCE] [expires: 2019-08-06]
      Key fingerprint = 6C84 7129 A72F 6144 E629  9C92 CE0E AD7F 0718 0C35
uid                   [ultimate] Alexandre Pujol (Email) <alexandre.pujol@ucdconnect.ie>
uid                   [ultimate] Alexandre Pujol (Email) <alexandre@pujol.io>
```

{{< get-key "0xce0ead7f07180c35" "07180C35" >}}

## Code Signing Key
The following key is used to sign commits, tags and releases:

```
pub   rsa4096/0xC5469996F0DF68EC 2017-01-09 [SC]
      Key fingerprint = 06A2 6D53 1D56 C42D 6680  5049 C546 9996 F0DF 68EC
uid                   [ultimate] Alexandre Pujol (Git) <alexandre@pujol.io>
```

{{< get-key "0xc5469996f0df68ec" "F0DF68EC" >}}
