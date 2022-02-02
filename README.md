# crud-php-docker-ajax-jquery-bootstrap

### docker file sirve para ejecutar comandos a ejecutar para crear la imagen
### se coloca el punto donde se va a ejecutar
```
docker build -t dockerfile .
```

## docker compose
```
docker-composer.yaml
se crea imagenes al mismo timepo, permite enlazar un container con otro comunicacion entre si
```

### ejecutar el docker compose
``` docker-compose up -d ```

### entrar a la terminal del contenedor
``` docker exec -it docker-php bash ```


### instalad utilidad de msqli
```docker-php-ext-install mysqli ```

### reiniciar apache
``` apachectl restart ```

### saber si la utilidad de  msqli existe
### saldra error la primera vez
``` docker-php-ext-enable mysqli ```