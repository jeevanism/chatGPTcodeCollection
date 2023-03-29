import json

# Read in the JSON file
with open('quotes.json', 'r') as file:
    quotes = json.load(file)

# Filter the quotes with "Buddha" as the author
buddha_quotes = [quote for quote in quotes if quote['author'] == 'Buddha']

# Write the filtered quotes to a new JSON file
with open('buddha_quotes.json', 'w') as file:
    json.dump(buddha_quotes, file)
