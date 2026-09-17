FROM nginx:alpine

# Copy static website assets to Nginx default public directory
COPY . /usr/share/nginx/html

# Expose standard HTTP port
EXPOSE 80