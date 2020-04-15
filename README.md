# REST and GRAPHQL for WP Document Revision


This plugin adds GraphQL and REST routes for [WP Document Revisions](https://wordpress.org/plugins/wp-document-revisions/)

REST route - `/wp-json/wp/v2/docs`

GraphQL request example:
```
query {
  documents {
    edges {
      node {
        title
        link
        date            
      }
    }
  }
}
```
