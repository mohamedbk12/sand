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

CREATE TABLE fe_users (
    companycasid    varchar(1024)   DEFAULT '' NOT NULL,
    casid           varchar(1024)   DEFAULT '' NOT NULL,
    title varchar(255) DEFAULT '',
    position varchar(255) DEFAULT ''
);

CREATE TABLE fe_groups (
    sand_cas_sync_field varchar(255) DEFAULT '' NOT NULL
);