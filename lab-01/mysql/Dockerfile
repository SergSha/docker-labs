FROM mysql:latest
ENV TZ=Europe/Moscow
ENV MYSQL_ROOT_PASSWORD root1234
ENV MYSQL_DATABASE cars
#ENV MYSQL_USER user
#ENV MYSQL_PASSWORD user1234
COPY ./data/ /docker-entrypoint-initdb.d/
