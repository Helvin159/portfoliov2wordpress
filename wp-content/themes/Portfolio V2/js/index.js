// import axios from '../node_modules/axios';

// Modules
// import load from 'loadash';
import redirectPage from './modules/redirect.js';
import navigationWork from './modules/navigation.js';
import abstracts from './modules/abstracts.js';
import SayHiButton from './modules/SayHiButton.js';
import message from './modules/newMessage.js';

// Instantiate a new object using our modules / classes
const redirect = new redirectPage();
const naviWork = new navigationWork();
const abstract = new abstracts();
const sayHi = new SayHiButton();
const NewMessage = new message();

// const loadash = () => load;
