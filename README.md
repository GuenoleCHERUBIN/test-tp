# test-tp

### Prerequisites

You need to install some software to run the application:

- [Composer](https://getcomposer.org/)
- [Docker CE](https://www.docker.com/community-edition)
- [Docker Compose](https://docs.docker.com/compose/install)

### Install composer dependencies

Run the following command to install composer dependencies:

```bash
composer install
```

#### Init

```bash
docker-compose up -d
```
> Notice: Check the `docker-compose.yml` file content. If other containers use the same ports, change yours.
