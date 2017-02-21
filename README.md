# [https://pujol.io][domain] [![build status][build-status]][build-url]

This personal website use a modified version of the [sustain][sustain-hugo]
theme for [hugo][hugo]. More than a few personalisation changes, this version of
sustain is exempt of tracker of any type:

* No Google Analytics.
* No Disqus.
* No javascript.
* No remote CSS and font. There are still present but loaded locally.

# Installation

### GitLab CI

This project's static Pages are built by [GitLab CI](https://about.gitlab.com/gitlab-ci/),
following the steps defined in [`.gitlab-ci.yml`](.gitlab-ci.yml).

### Building locally

To work locally with this project, you'll have to follow the steps below:

1. Clone this project: `git clone https://gitlab.com/roddhjav/roddhjav.gitlab.io.git`
1. Install [Hugo][hugo]
1. Preview your project: `hugo server`
1. Add content
1. Generate the website: `hugo` (optional)

Read more at Hugo's [documentation](https://gohugo.io/overview/introduction/).

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
[build-status]: https://gitlab.com/roddhjav/roddhjav.gitlab.io/badges/master/build.svg
[build-url]: https://gitlab.com/roddhjav/roddhjav.gitlab.io/commits/master
[hugo]: https://gohugo.io/
[sustain-hugo]: https://github.com/nurlansu/hugo-sustain
[local]: http://localhost:1313/
