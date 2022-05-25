Had an annoying issue with the GraphQL translations.

After looking into it this was the right answer that made things work again:
https://stackoverflow.com/questions/61770306/while-working-with-the-magento-2-graphql-it-seems-that-the-string-translation-do/62723418#62723418

I poured it into a module to simply plug and play.

Place translations into i18n and those will get translated, nothing else!

Therefore make this as a base graphql translations module with the graphql translations and it'll stay nice and tidy.
