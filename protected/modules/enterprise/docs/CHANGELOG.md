Changelog
=========

1.2.16
-----------------------
- Enh: Added footer navigation support for HumHub 1.2.6+


1.2.15
----------------------
- Fix: Notification badge z-index issue
- Enh: Align space create visibility functions with core logic
- Enh: Added build.sh for theme build

1.2.14
----------------------
- Enh: Updated translations
- Fix: Solr search field access problem on some environments

1.2.13
----------------------
- Fix: Fixed missing search sorting option (SOLR engine)

1.2.12
----------------------
- Enh: HumHub 1.2.3 Search API changes
- Fix: Logout logged in user, on new JWT auth request

1.2.11
----------------------
- Fix: Post input hovered by space nav issue
- Enh: Close side menu when chainging a page
- Fix: Fix nicescroll rendering issue

1.2.10
----------------------
- Fix: LDAP attribute mapping ignore name case
- Fix: Space chooser empty message if no remote results
- Enh: Added following spaces to SpaceChooser
- Enh: Added badges for following and non member spaces in SpaceChooser

1.2.9 - June 4, 2017
----------------------
- Enh: Added space/group mapping based on LDAP attributes 

1.2.8 - March 01, 2017
----------------------
- Enh: Added less variable @ee-sidebar-elements-color
- Fix: Renamed less variable @sidebar-width to @ee-sidebar-width
- Enh: Fixed accessibility issues in theme layout


1.2.7 - April 03, 2017
----------------------
- Fix: Search from doesn't start search immediately


1.2.6 - March 27, 2017
----------------------
- Fix: New content count in enterprise theme space chooser appears in new line
- Fix: Archived spaces appears in space chooser

1.2.5 - March 25, 2017
----------------------
- Enh: Recompiled Stylesheets (new Wall Entry layout)
- Fix: Update search index on space type change
- Fix: Readded option to modify space images
- Enh: Theme LESS file improvements (standard less) as mixin
- Enh: Created @sidebar-width less variable in Enterprise theme
- Enh: Auto crop space title regarding @sidebar-width setting
- Enh: Updated directory space view
- Fix: Hide archived spaces in space overview

1.2.4 - March 20, 2017
----------------------
- Fix: LDAP profile image fix, updated documentation

1.2.3 - March 20, 2017
----------------------
- Enh: Collapsable space type menu
- Enh: Added humhub.enterprise.theme module
- Enh: Added LDAP profile image sync support

1.2.2 - March 08, 2017
----------------------
- Enh: Add searched spaces to related spacetype.

1.2.1 - February 24, 2017
-------------------------
- Enh: Added SearchWidget, main template adjustment
- Enh: Use default accountTopMenu with showUserName option
- Fix: Added ico definition to head.php 
- Fix: Unexpected space chooser behaviour when result is empty

1.2.0 - February 05, 2017
-------------------------
- Enh: Raised compatiblity to HumHub 1.2
- Enh: Added new less theming
- Enh: Optimized main template
- Enh: Usage of new space chooser
- Enh: Pjax Adjustments

1.1.13 - Obtober 28, 2016
-----------------------
- Enh: Added JWT authentication module (luke-)

1.1.11 - August 22, 2016
-----------------------
- Enh: Added e-mail to group mapping features

1.1.10 - August 14, 2016
-----------------------
- Enh: Added auto removal of users from ldap handles spaces
- Enh: Added memberof attribute when not exists


1.1.2 - June 13, 2016
-----------------------
- Enh: Added e-mail whitelist

1.1.0 - May 24, 2016
-----------------------
- Enh: Added SOLR Driver

1.0.7 - June 6, 2016
-----------------------
- Fixed: HumHub 1.1 admin alignments

1.0.6 - April 11, 2016
-----------------------
- Fixed: Multi DropDown Select2 Alignment
- Fixed: Calendar intems overlap DropDown
- Enh: Updated translations

1.0.5 - March 25, 2016
-----------------------
- Fixed: Mobile Layouts
- Fixed: Brand logo layout fix
- Enh: Updated translations

1.0.4 - March 9, 2016
-----------------------
- Fixed: Brand Logo in sidebar
- Fixed: Mobile main content alignment in mobile navigation
- Fixed: use directory page size if set
- Enh: Handle LDAP parent groups
- Enh: Improved LDAP error handling

1.0.3 - Februrary 27, 2016
-----------------------
- Fixed: CSS Fixes
- Enh: Updated translations

1.0.2 - Februrary 2, 2016
-----------------------
- Enh: Updated translations
- Enh: Added LDAP Authclient