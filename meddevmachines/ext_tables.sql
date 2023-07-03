CREATE TABLE tx_meddevmachines_domain_model_categories (
	name varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_meddevmachines_domain_model_groupes (
	groupnames varchar(255) NOT NULL DEFAULT '',
	titel varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_meddevmachines_domain_model_machines (
	name varchar(255) NOT NULL DEFAULT '',
	images int(11) unsigned NOT NULL DEFAULT '0',
	header varchar(255) NOT NULL DEFAULT '',
	subheader varchar(255) NOT NULL DEFAULT '',
	link varchar(255) NOT NULL DEFAULT '',
	linktext varchar(255) NOT NULL DEFAULT '',
	video int(11) unsigned NOT NULL DEFAULT '0',
	videotitel varchar(255) NOT NULL DEFAULT '',
	videotext text,
	videolink varchar(255) NOT NULL DEFAULT '',
	videolinktext varchar(255) NOT NULL DEFAULT '',
	subimages int(11) unsigned NOT NULL DEFAULT '0',
	subimages_titel varchar(255) NOT NULL DEFAULT '',
	caracteristique int(11) unsigned NOT NULL DEFAULT '0',
	maschineanfragen int(11) unsigned NOT NULL DEFAULT '0',
	technicaldata int(11) unsigned NOT NULL DEFAULT '0',
	accessoires int(11) unsigned NOT NULL DEFAULT '0',
	categories int(11) unsigned DEFAULT '0',

);


CREATE TABLE sys_category (
	template varchar(255) NOT NULL DEFAULT '',
);


CREATE TABLE tx_meddevmachines_domain_model_caracteristique (
	machines int(11) unsigned DEFAULT '0' NOT NULL,
	name varchar(255) NOT NULL DEFAULT '',
	value varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_meddevmachines_domain_model_maschineanfragen (
	machines int(11) unsigned DEFAULT '0' NOT NULL,
	images int(11) unsigned NOT NULL DEFAULT '0',
	header varchar(255) NOT NULL DEFAULT '',
	text text,
	machineinfo int(11) unsigned NOT NULL DEFAULT '0',
	cuttinginformation int(11) unsigned NOT NULL DEFAULT '0'
);

CREATE TABLE tx_meddevmachines_domain_model_machineinfo (
	maschineanfragen int(11) unsigned DEFAULT '0' NOT NULL,
	name varchar(255) NOT NULL DEFAULT '',
	value varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_meddevmachines_domain_model_cuttinginformation (
	maschineanfragen int(11) unsigned DEFAULT '0' NOT NULL,
	name varchar(255) NOT NULL DEFAULT '',
	value varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_meddevmachines_domain_model_technicaldata (
	machines int(11) unsigned DEFAULT '0' NOT NULL,
	maschinensize varchar(255) NOT NULL DEFAULT '',
	tablesize varchar(255) NOT NULL DEFAULT '',
	workingrange int(11) unsigned NOT NULL DEFAULT '0',
	workpiece int(11) unsigned NOT NULL DEFAULT '0',
	maxspeed int(11) unsigned NOT NULL DEFAULT '0'
);

CREATE TABLE tx_meddevmachines_domain_model_workingrange (
	technicaldata int(11) unsigned DEFAULT '0' NOT NULL,
	name varchar(255) NOT NULL DEFAULT '',
	value varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_meddevmachines_domain_model_workpiece (
	technicaldata int(11) unsigned DEFAULT '0' NOT NULL,
	name varchar(255) NOT NULL DEFAULT '',
	value varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_meddevmachines_domain_model_maxspeed (
	technicaldata int(11) unsigned DEFAULT '0' NOT NULL,
	name varchar(255) NOT NULL DEFAULT '',
	value varchar(255) NOT NULL DEFAULT ''
);



CREATE TABLE tx_meddevmachines_domain_model_accessoires (
	machines int(11) unsigned DEFAULT '0' NOT NULL,
	accessoireimages int(11) unsigned NOT NULL DEFAULT '0',
	accessoiretext int(11) unsigned NOT NULL DEFAULT '0'
);

CREATE TABLE tx_meddevmachines_domain_model_accessoireimages (
	accessoires int(11) unsigned DEFAULT '0' NOT NULL,
	image int(11) unsigned NOT NULL DEFAULT '0',
	text varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_meddevmachines_domain_model_accessoiretext (
	accessoires int(11) unsigned DEFAULT '0' NOT NULL,
	text text
);