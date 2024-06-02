# Use the official PHP 7.3 image
FROM gcr.io/google-appengine/php73

# Copy the current directory contents into the container at /app
COPY . /app

# Set the working directory to /app
WORKDIR /app

# Ensure the document root is correct
ENV DOCUMENT_ROOT /app

# Expose port 8080 and start the PHP server
EXPOSE 8080
CMD ["php", "-S", "0.0.0.0:8080", "-t", "/app"]
