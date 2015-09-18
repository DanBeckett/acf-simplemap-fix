# Advanced Custom Fields: Simplemap Backend Compatibility Fix
Contributors: Dan Beckett, Door4
Tags: advanced custom fields, simplemap, google maps, google.load, hotfix, patch
Requires at least: 3.0
Tested up to: 4.3.1
Stable tag: 4.3.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

## Description ##

Quick patch for compatibility issue when using Advanced Custom Fields (v5 on) and Simplemap.

## The Problem ##

Since ACF included the Google Map field as standard, a queueing problem with javascript now occurs in the backend if editing non-Simplemap content where a clash with google.load halts javascript in the browser before TinyMCE is loaded. This fix makes a failsafe call to the Google API when creating the fields, to make sure google.load is available to use.
