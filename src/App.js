import React, { Fragment } from "react";
// import { BrowserRouter as Router, Route, Switch } from "react-router-dom";
import Hero from "./components/layout/Hero";
import Navbar from "./components/layout/Navbar";

import "./App.css";

function App () {
	return (
		<Fragment>
			<Navbar />
			<Hero />
		</Fragment>
	);
}

export default App;
