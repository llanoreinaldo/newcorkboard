<<<<<<< HEAD:resources/assets/js/components/Section1na.js
import React, { Component } from "react";
import ReactDOM from "react-dom";
=======
import React, { Component } from '../../../../../../../../../../../AppData/Local/Microsoft/TypeScript/2.9/node_modules/@types/react';
import ReactDOM from '../../../../../../../../../../../AppData/Local/Microsoft/TypeScript/2.9/node_modules/@types/react-dom';
>>>>>>> master:resources/assets/js/components/Home/Section1na.js

export default class Section1na extends Component {
  render() {
    return (
      <section className="section section-dark">
        <h2>Create Your Board</h2>

        {/* <!-- Create New Board Code --> */}
        <div id="app">
          <form action="/api/boards" method="POST" id="start-board">
            <div className="container">
              <div className="flex-row row justify-content-center">
                <div className="col-6-md col-12-xs" style={{ marginRight: 10 }}>
                  <input
                    className="new-item form-control"
                    placeholder="Your New Board Name"
                    type="text"
                    id="boardName"
                    required="required"
                    name="name"
                  />
                </div>
                <div className="col-4-md col-12-xs" style={{ marginRight: 10 }}>
                  <input
                    className="new-item form-control"
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
                    placeholder="Your Email"
                    type="email"
                    id="ownerEmail"
                    required="required"
                    name="email"
                  />
                </div>
                <div className="col-4-md col-12-xs">
                  {/* Need to change href for proper route */}
                  <a href="{{ url('/home') }}">
                    {" "}
                    <button
                      value="Create New Board"
                      type="submit"
                      className="btn btn-primary"
                      data-toggle="modal"
                      id="createBoard"
                    >
                      Create New Board
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </form>
          <a href="/home">
            {" "}
            <p
              value="Back To Dashboard"
              //   className="btn btn-primary"
              data-toggle="modal"
              id="backtodash"
            >
              ◄Dashboard
            </p>
          </a>
        </div>
      </section>
    );
  }
}

if (document.getElementById("section1na")) {
  ReactDOM.render(<Section1na />, document.getElementById("section1na"));
}
