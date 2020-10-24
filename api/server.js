const express = require('express');
const cors = require('cors')
const bodyParser = require('body-parser')

//setup Redis:

//Start Express App
const app = express();

app.use(bodyParser.json()); // support json encoded bodies
app.use(bodyParser.urlencoded({ extended: false })); // support encoded bodies
app.use(cors());

const corsOptions = {
    origin: 'http://localhost:3000',
}

const port = 8000;
app.listen(port, () => {
    console.log(`App running on port ${port}...`);
});