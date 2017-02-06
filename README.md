# Source code for [https://pujol.io](https://pujol.io). [![build status](https://gitlab.com/roddhjav/roddhjav.gitlab.io/badges/master/build.svg)][1]

# Installation

### GitLab CI

This project's static Pages are built by [GitLab CI](https://about.gitlab.com/gitlab-ci/),
following the steps defined in [`.gitlab-ci.yml`](.gitlab-ci.yml):

		image: publysher/hugo

		pages:
		  script:
		  - hugo
		  artifacts:
			paths:
			- public
		  only:
		  - master


### Building locally

To work locally with this project, you'll have to follow the steps below:

1. Fork, clone or download this project
1. Install Hugo
1. Preview your project: `hugo server`
1. Add content
1. Generate the website: `hugo` (optional)

Read more at Hugo's [documentation](https://gohugo.io/overview/introduction/).

If you clone or download this project to your local computer and run `hugo server`,
your site can be accessed under `localhost:1313`.

## License
See [LICENSE](LICENSE.md)

## Credits
* Image: Unsplash ([unsplash.com](https://unsplash.com))
* Icons: Font Awesome ([fortawesome.github.io/Font-Awesome/](https://fortawesome.github.io/Font-Awesome/))
* Other: 
* html5shiv.js (@afarkas @jdalton @jon_neal @rem)
* CSS3 Pie ([css3pie.com](http://css3pie.com) )
* Respond.js ([j.mp/respondjs](http://j.mp/respondjs))
* Skel ([skel.io](http://skel.io))

[1]: https://gitlab.com/roddhjav/roddhjav.gitlab.io/commits/master
