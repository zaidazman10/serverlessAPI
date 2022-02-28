# Introduction



This documentation aims to provide all the information you need to work with our API.

<aside>As you scroll, you'll see code examples for working with the API in different programming languages.</aside>

> Base URL

```yaml
https://3mrny9luph.execute-api.ap-southeast-1.amazonaws.com     
```

# Endpoints

## Display a listing of the resource.

* `GET api/contacts`

## Store a newly created resource in storage.

* `POST api/contacts`

## Display the specified resource.

* `GET api/contacts/{id}`

id  integer  
The ID of the contact.

## Update the specified resource in storage.

* `PUT api/contacts/{id}`

## Remove the specified resource from storage.

* `DELETE api/contacts/{id}`

## Search for a specific contact information.

* `GET api/contacts/search/{parameter}`

parameter  string  

* `POST api/contacts/get-contact`