# Touhou Wiki Infrastructure Modernization and Migration Plan
Created: 2025-06-27</br>
Last Edited: 2025-06-27

## Objective
Migrate Touhou Wiki to MediaWiki 1.43.x, and a more easily reproducible
production enviroment and establish a long term maintainence playbook for Touhou
Wiki SysOps.

## Background
The western Touhou community has hosted its own independent wiki since
[2010](https://www.shrinemaiden.org/forum/index.php?topic=7710.0). Since taking
on the responsibility of running its own wiki, MediaWiki has been updated many
times, and Touhou Wiki has, for the most part, kept pace until the 1.43.x
upgrade.

As of time of writing (2025-06-07), the wiki is currently hosted on a VPS running
Gentoo. It's currently set up with PHP-FPM behind a nginx web server hosting
MediaWiki v1.39.3 in a [wiki
family](https://www.mediawiki.org/wiki/Manual:Wiki_family) configuration with
each language wiki as its own separate subdomain. The backing database is running
MariaDB v10.11. The entire instance sits behind
[CloudFlare](https://cloudflare.com) as a anti-DDoS solution and web application
firewall.

## Implementation
The intent of this project is to convert the existing configuration to use
[Docker](https://www.docker.com/) to ensure that the production state of the wiki
is reproducible and portable.

### Step 1: Create a Touhou Wiki Specific MediaWiki Docker Image
Touhou Wiki relies on a list of non-stock
[MediaWiki and PHP extensions](https://en.touhouwiki.net/wiki/Special:Version)
that do not come with a vanilla MediaWiki installation. The [official MediaWiki
docker image's docs](https://hub.docker.com/_/mediawiki/) state that it must be
extended and built as its own separate image with the installed extensions. This
will contian both the extensions and also the non-secret settings
([ExtensionSettings.php](../towhouwiki-docker-mediawiki/ExtensionSettings.php),
[LocalSettings.php](../towhouwiki-docker-mediawiki/LocalSettings.php),
[CommonSettings.php](../towhouwiki-docker-mediawiki/CommonSettings.php), and
langauge specific wiki configurations).

### Step 2: Touhou Wiki docker compose configuration
The web server and database configurations need to be updated to run inside of
Docker. The nginx and MariaDB configs need to be adjusted for use inside
containers.

### Step 3: Replicate the production state of Touhou Wiki in a testing environment
A clean slate, VPS will be set up as a separate test environment for this new
deployment. Here the docker compose config will be tested alongside an import of
at least a subset of the production database to ensure that the site is still
working as intended. This VPS can be signifcantly smaller than the current
production VPS.

A new test domain will be registered (i.e. `touhowikitest.net`) for this testing
environment.

### Step 4: Deploy the docker based MediaWiki 1.39.12
A separate, clean-slate, VPS will be set up with a copy of the staging
environment using the docker-compose configruation.

This will require downtime to avoid further live modifications to the database
and file uploads. A full DB dump and copy of the files directory will need to be
transfered to the new VPS, and ingested into the new database. The estimated
downtime for this migration is ~60 minutes.

During this migration period, the DNS entries will point to a static website
(i.e. GitHub Pages) that notifies users of the downtime.

Upon confirmation that the system is working without signficant issues, the
DNS entries will be updated to point at the new VPS.

As all operations are done on a separate, clean-slate VPS, this step does not
require special backup strategy. Should anything unexpected occur, we can restart
the exsiting VPS, and the only cost would come from the maintainence downtime.
The existing VPS will be disabled but not deleted for the month following the
migration as a failsafe if the migration is found to be non-recoverable in the
following weeks.

### Step 5: Upgrade to MediaWiki 1.43.x
Once it's been determined that the 1.39.x Docker version of the wiki is stable, a
separate upgrade attempt will be made. The primary changes needed here would be
to bump the base MediaWiki docker image version, bumping the extension versions,
and then attempting the Wikimedia Foundation upgrade script. Prior attempts at
this have failed in the past due to some incompatible configurations, so extra
SQL scripts may need to be written to upgrade to the 1.43.x.

These migrations will be attempted first on the test environment and migration
scripts will be tested there before applying the migration scripts to the
prodution system.

A backup of the entire database and file set will be made before the migration is
applied.

## Touhou Wiki MediaWiki Upgrade Policy
To minimize downtime, we will only be updating to new LTS (Long Term Supprot)
versions of MediaWiki on a bi-yearly basis. After the upgrade to 1.43.x, the next
upgrade will be scheduled for 2028.
