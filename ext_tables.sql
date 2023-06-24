#
# Add SQL definition of database tables
#
CREATE TABLE tx_news_domain_model_news (
    old_type varchar(255) DEFAULT '' NOT NULL,
    old_uid int(11) unsigned DEFAULT '0',
    tt_address int(11) DEFAULT 0 ,
    displayorderview varchar(255) DEFAULT '',
);

CREATE TABLE tt_content (
    slider_type varchar(255) DEFAULT '' NOT NULL,
    tx_sand_sitepackage_teaser_item int(11) unsigned DEFAULT '0',
    space_before_class varchar(255) DEFAULT '' NOT NULL,
    space_after_class varchar(255) DEFAULT '' NOT NULL,
    image_position varchar(255) DEFAULT '' NOT NULL,
    link varchar(1024) DEFAULT '' NOT NULL,
    background varchar(1024) DEFAULT '' NOT NULL,
    link_text varchar(1024) DEFAULT '' NOT NULL,
    show_icon varchar(1024) DEFAULT '' NOT NULL,
    calculate_button varchar(1024) DEFAULT '' NOT NULL,
    select_container varchar(255) DEFAULT '' NOT NULL,
    imageh varchar(255) DEFAULT '' NOT NULL,
    imagew varchar(255) DEFAULT '' NOT NULL,
);

#
# Table structure for table 'tx_sand_sitepackage_teaser_item'
#
CREATE TABLE tx_sand_sitepackage_teaser_item (
    tt_content int(11) unsigned DEFAULT '0',
    tx_sand_sitepackage_teaser_item2 int(11) unsigned DEFAULT '0',
    /* To be able to hide every inline item */
    hidden tinyint(4) DEFAULT '0' NOT NULL,
    header varchar(255) DEFAULT '' NOT NULL,
    header_layout varchar(255) DEFAULT '' NOT NULL,
    subheader varchar(255) DEFAULT '' NOT NULL,
    bodytext varchar(1024) DEFAULT '' NOT NULL,
    image int(11) DEFAULT '0' NOT NULL,
    media int(11) DEFAULT '0' NOT NULL,
    file int(11) DEFAULT '0' NOT NULL,
    image_position varchar(255) DEFAULT '' NOT NULL,
    buttonslanguage varchar(255) DEFAULT '' NOT NULL,
    link varchar(1024) DEFAULT '' NOT NULL,
    link_text varchar(1024) DEFAULT '' NOT NULL,
    links_title varchar(1024) DEFAULT '' NOT NULL,
    email varchar(255) DEFAULT '' NOT NULL,
    tel varchar(255) DEFAULT '' NOT NULL,
    date date default NULL,
    color_select varchar(255) DEFAULT '' NOT NULL,
    box_type varchar(255) DEFAULT '' NOT NULL,
    show_image varchar(255) DEFAULT '' NOT NULL,
    mainsfrequency varchar(1024) DEFAULT '' NOT NULL,
    voltage varchar(1024) DEFAULT '' NOT NULL,
    powerconsumption varchar(1024) DEFAULT '' NOT NULL,
    outputfrequency varchar(1024) DEFAULT '' NOT NULL,
    outputpower varchar(255) DEFAULT '' NOT NULL,
    machinename varchar(255) DEFAULT '' NOT NULL,
    total varchar(1024) DEFAULT '' NOT NULL,
    adjustline varchar(255) DEFAULT '' NOT NULL,
    brightline varchar(255) DEFAULT '' NOT NULL,
    coolline varchar(255) DEFAULT '' NOT NULL,
    detectline varchar(255) DEFAULT '' NOT NULL,
    used varchar(255) DEFAULT '' NOT NULL,
    usedpercent varchar(255) DEFAULT '' NOT NULL,
);

#
# Table structure for table 'tx_sand_sitepackage_teaser_item2'
#
CREATE TABLE tx_sand_sitepackage_teaser_item2 (
    tx_sand_sitepackage_teaser_item int(11) unsigned DEFAULT '0',
    /* To be able to hide every inline item */
    hidden tinyint(4) DEFAULT '0' NOT NULL,
    header varchar(255) DEFAULT '' NOT NULL,
    color_select varchar(255) DEFAULT '' NOT NULL,
    subheader varchar(255) DEFAULT '' NOT NULL,
    bodytext varchar(1024) DEFAULT '' NOT NULL,
    image int(11) DEFAULT '0' NOT NULL,
    highimage int(11) DEFAULT '0' NOT NULL,
    link varchar(1024) DEFAULT '' NOT NULL,
    link_text varchar(1024) DEFAULT '' NOT NULL,
);


#
# Table structure for table 'pages'
#
CREATE TABLE pages (
    image varchar(1024) DEFAULT '' NOT NULL,
);


INSERT INTO `tx_gridelements_backend_layout` (`uid`, `pid`, `tstamp`, `crdate`, `cruser_id`, `t3ver_oid`, `t3ver_wsid`, `t3ver_state`, `t3ver_stage`, `t3_origuid`, `sorting`, `deleted`, `hidden`, `t3ver_label`, `t3ver_count`, `t3ver_tstamp`, `t3ver_move_id`, `title`, `alias`, `frame`, `description`, `horizontal`, `top_level_layout`, `config`, `pi_flexform_ds`, `pi_flexform_ds_file`, `icon`) VALUES
(1, 25, 1685912312, 1685868618, 1, 0, 0, 0, 0, 0, 256, 0, 0, '', 0, 0, 0, '2 columns', '2columns', 0, '', 0, 0, 'backend_layout {\r\n	colCount = 2\r\n	rowCount = 1\r\n	rows {\r\n		1 {\r\n			columns {\r\n				1 {\r\n					name = 0x0\r\n					colPos = 1\r\n				}\r\n				2 {\r\n					name = 1x0\r\n					colPos = 2\r\n				}\r\n			}\r\n		}\r\n	}\r\n}\r\n', '', '0', '0'),
(2, 25, 1687611387, 1687599371, 1, 0, 0, 0, 0, 0, 128, 0, 0, '', 0, 0, 0, '3 columns', '3columns', 0, '', 0, 0, 'backend_layout {\r\n	colCount = 3\r\n	rowCount = 1\r\n	rows {\r\n		1 {\r\n			columns {\r\n				1 {\r\n					name = 0x0\r\n					colPos = 1\r\n					maxitems = NaN\r\n				}\r\n				2 {\r\n					name = 1x0\r\n					colPos = 2\r\n					maxitems = NaN\r\n				}\r\n				3 {\r\n					name = 2x0\r\n					colPos = 3\r\n					maxitems = NaN\r\n				}\r\n			}\r\n		}\r\n	}\r\n}\r\n', '', '0', '0'),
(3, 25, 1687613467, 1687599428, 1, 0, 0, 0, 0, 0, 64, 0, 0, '', 0, 0, 0, '4 columns', '4columns', 0, '', 0, 0, 'backend_layout {\r\n	colCount = 4\r\n	rowCount = 1\r\n	rows {\r\n		1 {\r\n			columns {\r\n				1 {\r\n					name = 0x0\r\n					colPos = 1\r\n					maxitems = NaN\r\n				}\r\n				2 {\r\n					name = 1x0\r\n					colPos = 2\r\n					maxitems = NaN\r\n				}\r\n				3 {\r\n					name = 2x0\r\n					colPos = 3\r\n					maxitems = NaN\r\n				}\r\n				4 {\r\n					name = 3x0\r\n					colPos = 4\r\n					maxitems = NaN\r\n				}\r\n			}\r\n		}\r\n	}\r\n}\r\n', '', '0', '0'),
(4, 25, 1687614397, 1687613719, 1, 0, 0, 0, 0, 0, 32, 0, 0, '', 0, 0, 0, '3/3/6 columns', '336columns', 0, '', 0, 0, 'backend_layout {\r\n	colCount = 4\r\n	rowCount = 1\r\n	rows {\r\n		1 {\r\n			columns {\r\n				1 {\r\n					name = 0x0\r\n					colPos = 1\r\n				}\r\n				2 {\r\n					name = 1x0\r\n					colPos = 2\r\n				}\r\n				3 {\r\n					name = 2x0\r\n					colspan = 2\r\n					colPos = 3\r\n				}\r\n			}\r\n		}\r\n	}\r\n}\r\n', '', '0', '0'),
(5, 25, 1687614375, 1687614109, 1, 0, 0, 0, 0, 0, 16, 0, 0, '', 0, 0, 0, '6/3/3 columns', '633columns', 0, '', 0, 0, 'backend_layout {\r\n	colCount = 4\r\n	rowCount = 1\r\n	rows {\r\n		1 {\r\n			columns {\r\n				1 {\r\n					name = 0x0\r\n					colspan = 2\r\n					colPos = 1\r\n				}\r\n				2 {\r\n					name = 2x0\r\n					colPos = 2\r\n				}\r\n				3 {\r\n					name = 3x0\r\n					colPos = 3\r\n				}\r\n			}\r\n		}\r\n	}\r\n}\r\n', '', '0', '0'),
(6, 25, 1687614313, 1687614244, 1, 0, 0, 0, 0, 0, 8, 0, 0, '', 0, 0, 0, '4/8 columns', '48columns', 0, '', 0, 0, 'backend_layout {\r\n	colCount = 3\r\n	rowCount = 1\r\n	rows {\r\n		1 {\r\n			columns {\r\n				1 {\r\n					name = 0x0\r\n					colPos = 1\r\n				}\r\n				2 {\r\n					name = 1x0\r\n					colspan = 2\r\n					colPos = 2\r\n				}\r\n			}\r\n		}\r\n	}\r\n}\r\n', '', '0', '0'),
(7, 25, 1687614365, 1687614365, 1, 0, 0, 0, 0, 0, 4, 0, 0, '', 0, 0, 0, '8/4 columns', '84columns', 0, '', 0, 0, 'backend_layout {\r\n	colCount = 3\r\n	rowCount = 1\r\n	rows {\r\n		1 {\r\n			columns {\r\n				1 {\r\n					name = 0x0\r\n					colspan = 2\r\n					colPos = 1\r\n					maxitems = NaN\r\n				}\r\n				2 {\r\n					name = 2x0\r\n					colPos = 2\r\n				}\r\n			}\r\n		}\r\n	}\r\n}\r\n', '', NULL, NULL),
(8, 2, 1687614710, 1687614614, 1, 0, 0, 0, 0, 0, 256, 1, 0, '', 0, 0, 0, 'erg', '', 0, '', 0, 0, 'backend_layout {\r\n	colCount = 1\r\n	rowCount = 1\r\n	rows {\r\n		1 {\r\n			columns {\r\n				1 {\r\n					name = 0x0\r\n				}\r\n			}\r\n		}\r\n	}\r\n}\r\n', '', NULL, NULL);
