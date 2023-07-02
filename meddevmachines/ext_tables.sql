CREATE TABLE tx_meddevmachines_domain_model_categories (
	name varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_meddevmachines_domain_model_groupes (
	groupnames varchar(255) NOT NULL DEFAULT '',
	titel varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_meddevmachines_domain_model_machines (
	name varchar(255) NOT NULL DEFAULT '',
	tx_meddevmachines_desc text,
	images int(11) unsigned NOT NULL DEFAULT '0',
	video int(11) unsigned NOT NULL DEFAULT '0',
	tx_meddevmachines_group int(11) unsigned DEFAULT '0',
	category text NOT NULL
);
