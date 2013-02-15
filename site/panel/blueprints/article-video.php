# Blueprints for an article

title: Article
pages: false
files: true
fields:
	title:
		label: title
		type: text
		help: The title of your article.
		required: true    
	description:
		label: description
		type: textarea
		size: small
		help: Short description of your article.
		required: true
	tags:
		label: tags
		type: text
		help: Your Tags (Tag-One, Tag-Two, Tag-3). Please make sure that your tags have no spaces inside a tag
		required: true
	video:
		label: tags
		type: text
		help: Add the video id from Youtube or Vimeo.
		required: true