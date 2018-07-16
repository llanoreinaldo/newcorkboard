import React, { Component } from "react";
import ReactDOM from "react-dom";
import axios from "axios";

/* An example React component */
export default class Main extends Component {
  constructor() {
    super();
    this.state = {
      boards: []
    };
  }
  componentWillMount() {
    axios
      .get("api/boards")
      .then(response => {
        this.setState({
          boards: response.data
        });
      })
      .catch(errors => {
        console.log(errors);
      });
  }
  render() {
    return (
      <div className="container">
        {this.state.boards.map}(boards => <li>{boards.body}</li>)}
      </div>
    );
  }
}

/* The if statement is required so as to Render the component on pages that have a div with an ID of "root";  
*/

if (document.getElementById("main")) {
  ReactDOM.render(<Main />, document.getElementById("main"));
}
