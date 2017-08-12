# TFL Game

A TFL station name guessing game. Built in PHP using Laravel 5.5. It uses the TFL API.

## Game Objective

The game will present a phrase such as "WHT CHP L", which is the word "Whitechapel" but with vowels removed, and spaces added in odd places. You get a point for guessing it correctly.

## API

All requests are `POST` requests and follow a rough RPC standard.

### `list_lines`

### `list_zones`

### `create_game_state`

### `get_game_state`

### `get_next_question`

### `provide_answer`

### `get_help`
