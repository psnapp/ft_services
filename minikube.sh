minikube start --vm-driver=virtualbox --cpus=2 --disk-size="20000mb" --memory="3000mb"

eval $(minikube docker-env)

minikube addons enable metallb;
minikube addons enable dashboard;

kubectl apply -f srcs/metalLB.conf.yaml
docker build -t nginx srcs/nginx/
docker build -t php srcs/php/
docker build -t mysql srcs/mysql/
docker build -t wordpress srcs/wordpress/
docker build -t influxdb srcs/influxdb
docker build -t telegraf srcs/telegraf/
docker build -t grafana srcs/grafana/
docker build -t ftps srcs/ftps/

kubectl apply -f srcs/mysql
kubectl apply -f srcs/nginx
kubectl apply -f srcs/php
kubectl apply -f srcs/wordpress
kubectl apply -f srcs/influxdb/influxdb.yaml
kubectl apply -f srcs/telegraf/telegraf.yaml
kubectl apply -f srcs/grafana/grafana.yaml
kubectl apply -f srcs/ftps


minikube dashboard