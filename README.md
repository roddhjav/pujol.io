# **https://pujol.io**

[![][build]][project] [![][online]][domain] [![][release]][project]

**https://pujol.io source code**

This personal website uses the [congo] theme for [hugo].

## Installation

### GPG keys

The [key page](https://pujol.io/keys) is generated using the file `data/keys.yml`.
This file was signed using the master key with:
```sh
gpg --armor --detach-sign --default-key 61F02B21BA2503A526345A40E0CC7D788DA0EBF2 -o content/keys/keys.yml.asc data/keys.yml
```

The signature can be verified with:
```sh
gpg --verify content/keys/keys.yml.asc data/keys.yml 
```

### GitLab CI

This project's static Pages are built by [GitLab CI][ci],
following the steps defined in [`.gitlab-ci.yml`](.gitlab-ci.yml).

### Building locally

To work locally with this project, you'll have to follow the steps below:

1. Clone this project: `git clone https://gitlab.com/roddhjav/roddhjav.gitlab.io.git`
1. Install [Hugo][hugo]
1. Preview your project: `hugo server`
1. Add content
1. Generate the website: `hugo` (optional)

Read more at
* Hugo's [documentation][hugodoc]
* Congo's [documentation][congodoc]

If you clone or download this project to your local computer and run `hugo server`,
your site can be accessed under [localhost:1313][local].

## License

    The MIT License (MIT)

    Copyright (c) 2017 Alexandre PUJOL

    Permission is hereby granted, free of charge, to any person obtaining a copy
    of this software and associated documentation files (the "Software"), to deal
    in the Software without restriction, including without limitation the rights
    to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
    copies of the Software, and to permit persons to whom the Software is
    furnished to do so, subject to the following conditions:

    The above copyright notice and this permission notice shall be included in all
    copies or substantial portions of the Software.

    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
    IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
    FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
    AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
    LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
    OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
    SOFTWARE.

[domain]: https://pujol.io
[project]:  https://gitlab.com/roddhjav/roddhjav.gitlab.io
[build]: https://gitlab.com/roddhjav/roddhjav.gitlab.io/badges/master/pipeline.svg?style=flat-square
[online]: https://img.shields.io/website/https/pujol.io.svg?style=flat-square
[release]: https://img.shields.io/github/release/roddhjav/pujol.io.svg?maxAge=600&style=flat-square
[hugo]: https://gohugo.io/
[congo]: https://github.com/jpanther/congo
[local]: http://localhost:1313/
[ci]: https://about.gitlab.com/gitlab-ci/
[hugodoc]: https://gohugo.io/overview/introduction/
[congodoc]: https://jpanther.github.io/congo/docs/
