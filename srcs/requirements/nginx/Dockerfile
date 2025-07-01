FROM debian:bookworm
RUN apt update && apt upgrade && apt install -y \
	nginx \
	openssl
COPY default /etc/nginx/sites-available/.
RUN mkdir -p /etc/ssl/private /etc/nginx/certs
COPY ./entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

#below we can also use ENTRYPOINT ["nginx", "-g", "daemon off;"] 
#if we want to use docker run nginx all the time without being seted outside the container
CMD ["/entrypoint.sh"]