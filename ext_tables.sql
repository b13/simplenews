CREATE TABLE tx_simplenews_domain_model_news (
	title varchar(255) DEFAULT '' NOT NULL,
	slug varchar(255) DEFAULT '/' NOT NULL,
	publishedon int(11) DEFAULT 0 NOT NULL,
	contents text DEFAULT '' NOT NULL
);
