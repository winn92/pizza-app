#### 1. getPizzas

```sh
curl --location --request GET 'http://127.0.0.1:8080/api/v1/pizzas'
```

#### 2. getpizza

```sh
curl --location --request GET 'http://127.0.0.1:8080/api/v1/pizzas/:pizzaId'
```

#### 3. GetToppings.

```sh
curl --location --request GET 'http://127.0.0.1:8080/api/v1/toppings'
```

#### 4. AddTopping.

```sh
curl --location --request POST 'http://127.0.0.1:8080/api/v1/toppings' \
    --header 'Content-Type: application/x-www-form-urlencoded' \
    --data-urlencode 'name=:nameTopping'
```

#### 5. DeleteTopping.

```sh
curl --location --request DELETE 'http://127.0.0.1:8080/api/v1/toppings/:toppingId'
```

#### 6. DeletePizza.

```sh
curl --location --request DELETE 'http://127.0.0.1:8080/api/v1/pizzas/:pizzaId'
```

#### 7. addPizza.

```sh
curl --location --request POST 'http://127.0.0.1:8080/api/v1/pizzas' \
    --header 'Content-Type: application/x-www-form-urlencoded' \
    --data-urlencode 'name=:namePizza'
```

#### 8. addToppingToPizza.

```sh
curl --location --request POST 'http://127.0.0.1:8080/api/v1/pizzas/:pizzaId/toppings' \
    --header 'Content-Type: application/x-www-form-urlencoded' \
    --data-urlencode 'topping=:toppingId'
```

#### 9. getToppingsForPizza.

```sh
curl --location --request GET 'http://127.0.0.1:8080/api/v1/pizzas/:pizzaId/toppings'
```

#### 10. removeToppingFromPizza

```sh
curl --location --request DELETE 'http://127.0.0.1:8080/api/v1/pizzas/:pizzaId/toppings/toppingId'
```
