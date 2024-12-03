FROM node:16

WORKDIR /app

COPY ../../shorturl-fe /var/www/app
COPY ../../shorturl-fe/package*.json ./
RUN npm install

COPY . .

EXPOSE 5173

CMD ["npm", "run", "dev"]
