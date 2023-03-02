le package.json va referencer l'ensemble des dependances (plug in, librairies JS )

npm install -D tailwindcss --> installer tailwind en tant que dependance dev (-D) 

npm install  tailwindcss --> installation d'une dependance 
npm install --> installer tout les packages referencés dans le package.json

npx tailwindcss init--> create a tailwind.config file 

on evite de versionner tout ce qui est lourd et non necessaire ex : node_modules cf .gitignore or vendors for back end

npx tailwindcss -i ./assets/styles/styles.css -o ./dist/styles.css --watch -> sert à compiler notre code tailwind en CSS 

--watch -> for every changes , compile again

