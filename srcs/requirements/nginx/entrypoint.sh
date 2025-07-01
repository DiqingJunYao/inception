#!/bin/sh

# Only generate if not already present
if [ ! -f "$CERT_PATH" ] || [ ! -f "$KEY_PATH" ]; then
    echo "Generating self-signed SSL certificate..."
    openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
        -keyout "$KEY_PATH" \
        -out "$CERT_PATH" \
        -subj "/C=MO/L=KH/O=1337/OU=student/CN=sahafid.42.ma"
fi

# Start Nginx in the foreground
nginx -g 'daemon off;'
