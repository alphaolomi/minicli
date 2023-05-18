<div align="center">
    <p>
        <img src="https://github.com/WendellAdriel/miniterm/raw/main/art/minicli.png" alt="Minicli" width="48"/>        
        <h1>MiniTerm</h1>
        Minicli Application Template powered with Termwind and Plates
    </p>
</div>

This repository is an application template for building command-line applications in PHP with [Minicli](https://github.com/minicli/minicli), [Termwind](https://github.com/nunomaduro/termwind) and [Plates](https://github.com/thephpleague/plates). 

Please check [the official documentation](https://docs.minicli.dev) for more information on how to use this application template.


## Development

#### Requirements

- PHP 8.1+ (cli)
- [Composer](https://getcomposer.org/)

## Installation

```bash
# clone the repository

# install the dependencies
composer install
```

## Try it out

```bash
# to run the app
./minicli demo
```

### Docker

#### Development

```bash
# for creating the app container
docker-compose up -d

# to install the dependencies
docker-compose exec app composer install 

# to run the app
docker-compose exec app minicli your-custom-command
```

#### Production
```bash
# Build
docker build -t yourname/myapp-minicli .

# Run
docker run --rm 

# Tag
docker tag yourname/myapp-minicli ghcr.io/yourname/myapp-minicli:latest

yourname/myapp-minicli your-custom-command
```