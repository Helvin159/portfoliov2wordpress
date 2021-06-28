// Modules
import load from 'loadash';
import redirectPage from '../js/modules/redirect.js';
import navigationWork from '../js/modules/navigation.js';
import abstracts from '../js/modules/abstracts.js';
import SayHiButton from '../js/modules/SayHiButton.js';

// import newMessage from './modules/newMessage.js';

// Instantiate a new object using our modules / classes
const redirect = new redirectPage();
const naviWork = new navigationWork();
const abstract = new abstracts();
const sayHi = new SayHiButton();
// const NewMessage = new newMessage();

const loadash = () => load;
