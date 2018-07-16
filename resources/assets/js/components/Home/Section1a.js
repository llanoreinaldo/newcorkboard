<<<<<<< HEAD:resources/assets/js/components/Section1a.js
import React, { Component } from "react";
import ReactDOM from "react-dom";
=======
import React, { Component } from '../../../../../../../../../../../AppData/Local/Microsoft/TypeScript/2.9/node_modules/@types/react';
import ReactDOM from '../../../../../../../../../../../AppData/Local/Microsoft/TypeScript/2.9/node_modules/@types/react-dom';
>>>>>>> master:resources/assets/js/components/Home/Section1a.js

export default class Section1a extends Component {
  render() {
    return (
      <section className="section section-dark">
        <h2>Login to Acess Your Boards. Register to Create a New Board.</h2>
        {/* <!-- Create New Board Code --> */}
        <div id="app">
          <form id="start-board">
            <div className="container">
              <div className="flex-row row justify-content-center">
                <div className="col-6-md col-12-xs" style={{ marginRight: 10 }}>
                  <button
                    className="btn btn-primary btn-lg new-item form-control"
                    id="login"
                  >
                    <a href="/home">Login</a>
                  </button>
                </div>
                <div className="col-6-md col-12-xs">
                  <button
                    className="btn btn-primary btn-lg new-item form-control"
                    id="register"
                  >
                    <a href="/register">Register</a>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </section>
    );
  }
}

if (document.getElementById("section1a")) {
  ReactDOM.render(<Section1a />, document.getElementById("section1a"));
}
