FROM centos:7

MAINTAINER "adachi" <adachi@marietta.co.jp>

COPY httpd/app.conf /etc/httpd/conf.d/
COPY httpd/ssl/localhost.key /etc/pki/tls/private/
COPY httpd/ssl/localhost.crt /etc/pki/tls/certs/
COPY php/00-app.ini /etc/php.d/
COPY postfix/main.cf /etc/postfix/
COPY postfix/master.cf /etc/postfix/
COPY dovecot/10-auth.conf /etc/dovecot/conf.d/
COPY dovecot/10-mail.conf /etc/dovecot/conf.d/
COPY dovecot/10-ssl.conf /etc/dovecot/conf.d/

#CMD ["/usr/sbin/init"]

#EXPOSE 80 443

ENV HOSTNAME app.localhost

RUN yum check-update; \
	yum clean all; \
	yum update -y; \
	yum install -y vim net-tools; \
	
	# Repository
	yum install -y epel-release; \
	rpm -ivh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm; \
	#rpm -ivh http://pkgs.repoforge.org/rpmforge-release/rpmforge-release-0.5.3-1.el7.rf.x86_64.rpm; \
	
	# Apache 2.4.6
	yum install -y httpd mod_ssl; \
	systemctl enable httpd.service; \
	mkdir /var/www/app; \
	
	# PHP 7.1
	yum install -y --enablerepo=remi,remi-php71 php php-gd php-mysqlnd php-mbstring php-xml php-pgsql php-pdo php-devel php-pear php-tidy; \
	
	# Zip
	yum install -y zip unzip; \
	yum install -y cc gcc; \
	yum install -y httpd-devel zlib-devel; \
	#pecl install zip; \
	pecl -d preferred_state=stable install -a zip-1.13.5; \

	# ImageMagick
	yum install -y ImageMagick ImageMagick-devel; \
	pecl install imagick; \

	# ffmpeg
	rpm -Uvh http://li.nux.ro/download/nux/dextop/el7/x86_64/nux-dextop-release-0-5.el7.nux.noarch.rpm; \
	yum install -y --enablerepo=epel,nux-dextop ffmpeg ffmpeg-devel; \

	# Postfix
	yum install -y postfix cyrus-sasl cyrus-sasl-plain cyrus-sasl-md5 cyrus-sasl-devel; \
	systemctl enable postfix; \
	systemctl enable saslauthd; \
	# Dovecot
	yum install -y dovecot; \
	systemctl enable dovecot; \
	# Mailbox
	mkdir -p /etc/skel/Maildir/{new,cur,tmp}; \
	chmod -R 700 /etc/skel/Maildir/; \
	useradd -s /sbin/nologin info; \
	useradd -s /sbin/nologin support; \
	useradd -s /sbin/nologin admin; \
	useradd -s /sbin/nologin system; \
	useradd -s /sbin/nologin alice; \
	useradd -s /sbin/nologin bob; \
	useradd -s /sbin/nologin carol; \
	echo 123456 | passwd --stdin system; \
	echo 123456 | passwd --stdin admin; \
	echo 123456 | passwd --stdin info; \
	echo 123456 | passwd --stdin support; \
	echo 123456 | passwd --stdin alice; \
	echo 123456 | passwd --stdin bob; \
	echo 123456 | passwd --stdin carol; \