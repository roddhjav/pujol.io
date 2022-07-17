---
title: Tomb and asymmetric GPG key support
description:
layout: blog
robots:
  - index
  - follow
tags:
  - tomb
  - encryption
  - linux
  - keys
  - gpg
date: "2017-04-17"
---

## Overview

[Tomb][tomb] is a simple tool to manage encrypted storage on Linux using LUKS, dm-crypt, GPG and other well know Linux software. It generates encrypted storage folders to be opened and closed using their associated key files, which are also protected with a password chosen by the user.

A tomb is like a locked folder that can be safely transported and hidden in a filesystem; its keys can be kept separate, for instance keeping the tomb file on your computer hard disk and the key files on a USB stick.

It has some really neat and easy to use features (see the [tomb website][tomb] and the [Paranoid #! Security guide][paranoid]):

1. Separation of encrypted file and key
1. Mounting files and folders in predefined places using bind-hooks
1. Hiding keys in picture-files using steganography

Since [Tomb 2.4][tombrelease], Tomb supports asymmetric encryption of Tomb keys using public/private GPG key pairs. It is now possible to protect a Tomb key using a GPG key (which can also be password-less for automation) as well encrypt a Tomb key for multiple recipients (list of GPG ids).

The purpose of this blog post is to explain how use Tomb with the new support of GPG key.

## Usage

In order to create a tomb, there are three steps to follow.

* Create a tomb file using `tomb dig`.
* Create a tomb key using `tomb forge`.
* Lock the tomb with the key using `tomb lock`.

With a GPG key you have three different ways to protect your to tomb key:

* Using your default GPG key in your keyring.
* Using a given GPG key.
* Using a given key id that will be hidden in the encrypted tomb key.

The three new tomb options are:

* `-g/--gpgid` a flag to activate the use of a GnuPG key in Tomb.
* `-r` to provide GnuPG recipients (separated by comma)
* `-R` to provide GnuPG hidden recipients (separated by comma)


## Create a tomb using a GPG key

In the following examples, we are going to use:

* `secret.tomb` as our tomb,
* `secret.tomb.key` as our tomb key,
* `39D3991C` as our GPG key id to protect the tomb key.

**Dig a 100MB tomb**
```
dig secret.tomb -s 100
```

**Forge a tomb key**

* Using your default key: `tomb forge secret.tomb.key -g`
* Using given key id: `tomb forge secret.tomb.key -gr 39D3991C`
* Using a hidden key id: `tomb forge secret.tomb.key -gR 39D3991C`

To use the default key, `~/.gnupg/gpg.conf` requires:
```
default-key <keyid>
default-recipient-self
```
Or
```
default-recipient <keyid>
```
Otherwise, the first key in the keyring is used.


**Lock a tomb with a key**
```
tomb lock secret.tomb -k secret.tomb.key -g
```

With a hidden key ID, you can use:
```
tomb lock secret.tomb -k secret.tomb.key -gR 39D3991C
```

**Open a tomb**
```
tomb open secret.tomb -k secret.tomb.key -g
```

{{< alert >}}
**Warning:** Do not forget the `-g` option, otherwise tomb will act as if the tomb key was password encrypted.
{{< /alert >}}


## Advanced features

**OpenPGP Smart Cards**

Are supported, you need to set it up in your GPG keyring and it should work out of the box. It provides an extra level of security and allows a PIN code to be used for unlocking the GPG key and decrypt the tomb key. After 3 false attempts, the smart card locks itself down.

**Share a tomb**

A tomb key can be encrypted with more than one recipient. Therefore, a tomb can be shared between different user. The multiple recipients are given using the `-r/-R` option and must be separated by a comma `,`.

**Steganography**

You will need to provide a steganography password on the top of your GPG key. Please note the key is buried encrypted, the use of the GPG key is only to make sure your bury a key you own.
```
$ tomb bury cat.jpg -k secret.tomb.key -g

$ tomb exhume cat.jpg -k secret.tomb.key

$ # If you want to open the tomb with a buried key
$ tomb open test.tomb -k cat.jpg -g
```

[tomb]: https://www.dyne.org/software/tomb/
[tombrelease]: https://files.dyne.org/tomb/
[paranoid]: http://crunchbang.org/forums/viewtopic.php?id=24722
