FROM alpine:3.12.3

RUN apk add openrc
RUN apk add influxdb

EXPOSE 8086
ENTRYPOINT ["influxd"]
