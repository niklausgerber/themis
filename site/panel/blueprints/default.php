<?php if(!defined('KIRBY')) exit ?>

# Blueprints for your Info page

title: Info
pages: false
files: true
fields:
	title:
		label: title
		type: text
		help: The title of the info page.
		required: true    
	description:
		label: description
		type: textarea
		size: small
		help: Short description of your info page.
		required: true