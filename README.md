# Introduction



This documentation aims to provide all the information you need to work with our API.

<aside>As you scroll, you'll see examples for working with the API.</aside>

> Base URL

```yaml
https://3mrny9luph.execute-api.ap-southeast-1.amazonaws.com     
```

# Endpoints

### Display a listing of the contacts.

* `GET api/contacts`

### Store a newly created contacts in storage.

* `POST api/contacts`

### Display the specified contacts.

* `GET api/contacts/{id}`

#### Required
`id=[integer]`

The ID of the contact.

### Update the specified contacts in storage.

* `PUT api/contacts/{id}`

### Remove the specified contacts from storage.

* `DELETE api/contacts/{id}`

### Search for a specific contacts information.

* `GET api/contacts/search/{parameter}`

#### Required
`parameter=[string]`

#### eg.
`email=john`
  

* `POST api/contacts/get-contact`

```yaml
{
    "ordered_by": "created_at",
    "sorted_by": "desc"
}
```