import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Filters extends Component {
    render() {
        return (
            // <!--NAV-->
            <nav className="navbar navbar-expand-lg navbar-light">

                {/* <!--FILTERS--> */}
                <div className="card">
                    <div className="card-body filterCard">
                        <center>

                            <h2>
                                <i className="fas fa-tags">ALL TAGS </i>
                            </h2>

                        </center>
                        <div className="card-body row col-lg-12 col-md-12 col-sm-12 filterButtons">
                            {/* {{#each board.tags}} */}
                            <li style={{listStyleType: none, paddingRight: 20, fontSize: 20}}>
                                <label>
                                    <input value="{{id}}" type="checkbox" className="checkboxBtn">{{ name }}</input></label>
                            </li>
                            {/* {{/each}} */}
                        </div>
                        <div className="row col-lg-12 col-md-12 col-sm-12 filterButtons"></div>
                        <hr></hr>
                        <ul>
                            <li>
                                <button type="button" className="btn filterSubmit" data-toggle="modal" data-target="#topicModal">
                                    <i className="fas fa-plus-circle"> Add a Tag</i>
                                </button>
                                <button type="button" className="btn filterSubmit" id="tagEdit">
                                    <i className="fas fa-pencil-alt"> Edit a Tag</i>
                                </button>
                                <button type="button" className="btn filterSubmit" id="tagDelete">
                                    <i className="fas fa-minus-circle"> Delete a Tag</i>
                                </button>
                                <button type="button" className="btn filterSubmit" id="tagSearch">
                                    <i className="fas fa-search"> Search by Tag(s)</i>
                                </button>
                            </li>
                            <br></br>
                        </ul>
                    </div>
                </div>
    </nav >
    
            
        );
    }
}

if (document.getElementById('filters')) {
    ReactDOM.render(<Filters />, document.getElementById('filters'));
}
