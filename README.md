## Cinema API Project

### Kayıt
Kullanıcı kaydı oluşturmak için register methodu kullanılır.

| Method Adresi   | /api/register |
|-----------------|---------------|
| Method Tipi     | POST          |
| Token           | YOK           |


#### Örnek Request
```json
{
"name": "test",
"email": "test@test.com",
"password": "test1234"
}
```


#### Örnek Response
```json
{
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYTMwMGZmYTMyZWM2MjczOTRjMTJmMThjZjQ5MjQyMGEwNGVhZjM3MGFiOTk1ZGQzZGViYWQ0NzRhMjQ1MGQ4OTY4ZTIxYzgwNmEwNGY2OWIiLCJpYXQiOjE2NTMxNjA0NzIuNTA5NTk0LCJuYmYiOjE2NTMxNjA0NzIuNTA5NTk2LCJleHAiOjE2ODQ2OTY0NzIuNTA1MzIxLCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.hmK1i68P3JLdp_jT0PICT6LEV0Ciw-jT-etGyYQC0DXNRopqVBfrfTDL32x-pnKtfx7-PP6ERCVcnBYdkOcG1W_aS5SwJfD2ceu4zzJHIXXdeMx19kOQCNyq2UJ-nhoCCbhB_jpWwDY58xrvGBxQ95StpNzgiGzn7FbHmPEoUcuo6tcOYwqmTyMEPvDodMnWIGnaelK4VpsP15EzhXFrG9y5tsQ33pCjIJ9p0vTHF0wHCUpLh4zeEl8aNCtf7f5rwXXCDbMBkjii2A1RMZAYmXjdPOEW5hvZC-X_iD6v49_zNxFGdyfiJuCmVmmRuat2Fzv6OOY6DEXXnWdcCbhZ8v0a8zwxlTvi709S98eO63T0QAsf4XwTTKJaJ3hDESomSnw8So65XJ80zV01xohMu7Q_t-HtKGzVUf6bRBBK3U90hM5IxgijJrItBzZ8T8Fq4R3hn1XxSrDAkRQp9ri9HhZcAR0JEhvmiY4mJPf51d-UOhb5Qoowmk97Wzx7ru4ISqYnsghiLnMsmmgPI_dGgX8OfHoDurZat404e4Yy0UCDBhDd9fazlgodHzl2KZK-s94sMpHKDq8jauflKN9HpeawZte4bXMWTHzWbH98_-pbCP8ylKGSmd7Yv1SukUItjqLdREeLLRsIikvfdzrO7Ig-jy-q6QEGoxlI6mq98tY"
}
```


### Giriş

Kimlik doğrulama için bearer token kullanılmaktadır veönderilen her requestin headerında bulunması gerekir.
Token alabilmek için kullanıcı bilgilerinin login methodu ile gönderilmesi gerekir.


| Method Adresi   | /api/login |
|-----------------|------------|
| Method Tipi     | POST       |
| Token           | YOK        |


#### Örnek Request

```json
{
    "email": "test@test.com",
    "password": "test1234"
}
```

#### Örnek Response

```json
{
"id": 2,
"name": "test",
"email": "test@test.com",
"token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMGViOWRiOTBhM2NkNWU4Y2IzYmZhZDExODA4MjEyMmI3ZDJmN2UxYjUzM2M5ZDJhYjI0YmQ0NjkxNDY3MGEzYzg3MjU0OTI1MWYyYTA1OTAiLCJpYXQiOjE2NTMxNjA4MjguNDg4NjY5LCJuYmYiOjE2NTMxNjA4MjguNDg4NjcxLCJleHAiOjE2ODQ2OTY4MjguNDgwODA0LCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.Y85mzBjUH-whpMfgQPLx19ZZpwB1wgU8L-KDSuiaCAjyvv-fdkZT5PqBk-WlmfEmiHK6PvhmnHTIS-vd7OByR7rQpS4jP1DOlri38VOtgG81P9AK9QyHzLV8CZD99KHZrScLYVvYwVlN5QQrnCf7T7-IhjdTe1gp_JyFNN9o3opWEBsPIgen_6abtjcC-SOT-2Og2K36_FNOgNhKWXycwOIsySLmu_59i0P1CiA3wdkJSSHC3pxwu1izp_YU1L_VGGASihYxCeeeMKgfe2sk6flwTXVjT3jtMea-bIZmB1tScat_mxNp_JwlwU1XMzu24GRGl6IEG7-JIhxtc-6ouVOv2GepLZBTbyN5jfdbBQdwF48VpvmREbnDmidfM1toacuQKRGQTGIPKce8HnOrWTbyV1QZnMsT9uLKUz7Y4ffCC9d5yFKTjL58KFN_HokaaQdrKRJSOG1rTIWDvZk6K9-vZsyTjwKMB70NFh9Fp50VT41ox2-moWB3fGjqmE0jJFOHFtD5fsEdKgFIJ4fNoPbP7-pe2TkYa4yeoGxs4K4amR5GyfQHDPlFO0PM8GxRBIEJN1CbRaqK_vQVkzCC-0UQDc6Y1DA_vDrS19TiR0akFNhPutZrQXE7TW1Q_jCVxlBIfs6DQGRYnV4rYHbBByssxEXESJJvMFUule_F2Tg"
}
```

### Şehirler

Cities methodu tüm şehirleri listelemek için kullanılır.

| Method Adresi   | /api/cities |
|-----------------|-------------|
| Method Tipi     | GET         |
| Token           | VAR         |

#### Örnek Response

```json
{
    "cities": [
        {
            "id": 1,
            "name": "Ankara"
        },
        {
            "id": 2,
            "name": "Antalya"
        },
        {
            "id": 5,
            "name": "Çorum"
        },
        {
            "id": 3,
            "name": "İstanbul"
        },
        {
            "id": 4,
            "name": "İzmir"
        }
    ]
}
```

### Şehir Sinemaları

| Method Adresi   | /api/cities/{city_id}/cinemas |
|-----------------|-------------------------------|
| Method Tipi     | GET                           |
| Token           | VAR                           |

Bir şehirde bulunan sinemaları listelemek için kullanılır. 
Parametre olarak adreste cities methodundan dönen responsetaki şehir idsi gönderilmelidir.


#### Örnek Response 

(/api/cities/5/cinemas)

```json
{
  "cinemas": [
    {
      "id": 1,
      "name": "Mısır Sineması"
    },
    {
      "id": 7,
      "name": "Gül Sineması"
    },
    {
      "id": 8,
      "name": "Uluslararası Klein mavisi Sineması"
    },
    {
      "id": 9,
      "name": "Kahverengimsi gri Sineması"
    },
    {
      "id": 11,
      "name": "Eski gül Sineması"
    }
  ]
}
```

### Sinema Filmleri

Bir sinemada bulunan filmleri listelemek için kullanılır.
Parametre olarak adreste cities/{city_id}/cinemas methodundan dönen responsetaki sinema idsi gönderilmelidir.

| Method Adresi   | /api/cinemas/{cinema_id}/movies |
|-----------------|---------------------------------|
| Method Tipi     | GET                             |
| Token           | VAR                             |

#### Örnek Response

(/api/cinemas/7/movies)

```json
{
    "movies": [
        {
            "cinema_movie_id": 19,
            "total_seat": 28,
            "name": "Harry Potter and the Chamber of Secrets",
            "year": "2002",
            "director": "Chris Columbus",
            "genre": "Fantasy"
        },
        {
            "cinema_movie_id": 263,
            "total_seat": 24,
            "name": "Harry Potter and the Half-Blood Prince",
            "year": "2009",
            "director": "David Yates",
            "genre": "Fantasy"
        },
        {
            "cinema_movie_id": 120,
            "total_seat": 29,
            "name": "Harry Potter and the Deathly Hallows – Part 2",
            "year": "2011",
            "director": "David Yates",
            "genre": "Fantasy"
        },
        {
            "cinema_movie_id": 167,
            "total_seat": 31,
            "name": "2 Fast 2 Furious",
            "year": "2003",
            "director": "John Singleton",
            "genre": "Action"
        },
        {
            "cinema_movie_id": 208,
            "total_seat": 50,
            "name": "Fast & Furious",
            "year": "2009",
            "director": "Justin Lin",
            "genre": "Action"
        },
        {
            "cinema_movie_id": 267,
            "total_seat": 36,
            "name": "F9",
            "year": "2021",
            "director": "Justin Lin",
            "genre": "Action"
        },
        {
            "cinema_movie_id": 5,
            "total_seat": 49,
            "name": "How to Train Your Dragon",
            "year": "2010",
            "director": "Dean DeBlois",
            "genre": "Animation"
        },
        {
            "cinema_movie_id": 22,
            "total_seat": 44,
            "name": "How to Train Your Dragon: The Hidden World",
            "year": "2019",
            "director": "Dean DeBlois",
            "genre": "Animation"
        }
    ]
}

```


### Boş Koltuklar

Bir sinemada bulunan bir filmdeki boş koltukları listeleyen method. 
Adreste Sinema Filmleri methodundan dönen response içindeki cinema_movie_id parametre olarak gönderilmelidir.

| Method Adresi   | /api/movies/{cinema_movie_id}/seats |
|-----------------|-------------------------------------|
| Method Tipi     | GET                                 |
| Token           | VAR                                 |


#### Örnek Response

(/api/movies/19/seats)

```json
{
    "available_seats": [
        1,
        2,
        3,
        4,
        5,
        6,
        7,
        8,
        9,
        10,
        11,
        12,
        13,
        14,
        15,
        16,
        17,
        18,
        19,
        20,
        21,
        22,
        23,
        24,
        25,
        26,
        27,
        28
    ]
}
```

### Biletleme

Seçilen sinema filmine bilet kesmek için kullanılan methoddur. 
Requestte, seçilmiş olan cinema_movie_id ile birlikte alınmak istenen koltuk numarası gönderilmelidir.

| Method Adresi   | /api/ticket/buy |
|-----------------|-----------------|
| Method Tipi     | POST            |
| Token           | VAR             |


 #### Örnek Request 
```json
{
    "cinema_movie_id": 19,
    "seat_number": 7
}
```

#### Örnek Response
```json
{
  "ticket_information": {
    "seat_number": "7",
    "cinema_movie_id": "19",
    "user_id": 2,
    "updated_at": "2022-05-21T21:20:04.000000Z",
    "created_at": "2022-05-21T21:20:04.000000Z",
    "id": 5
  }
}
```


