prompt : write a program of VueJS version 3 using <script setup> to display the quotes in square div blocks

explanation: In this component, we start by importing the ref and onMounted functions from the vue package. We use these functions to create a reactive quotes variable and load the filtered quotes from the buddha_quotes.json file when the component is mounted.

Next, we use the v-for directive to loop over each quote in the quotes variable and display it in a square div block. We use the :key binding to provide a unique key for each quote.

Finally, we define some basic styles for the div blocks using the style tag.

Note that in this example, we assume that the buddha_quotes.json file is in the same directory as the Vue component. If your JSON file is located elsewhere, you will need to modify the fetch function URL accordingly.
