import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Navbar extends Component {
    render() {
        return (

            // <!--NAVBAR SECTION-->

            <nav className="navbar navbar-expand-lg navbar-light fixed-top">
                <ul className="navbar-nav mr-auto">

                    <a className="navbar-brand" href="/boards/{{board.id}}">
                        <img id="logo" src="/assets/images/cork.png" alt="corkboard"></img>
                    </a>
                </ul>
                <ul>
                    <h1 id="boardName" data-boardId={{ board: id }}>{{ board: name }}</h1> {/* Changed board.id to board:id and board.name to board:name */}
                </ul>
                <button className="navbar-toggler smallMenu" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i style="color:white" className="fas fa-bars"></i>
                </button>

                <div className="collapse navbar-collapse" id="navbarSupportedContent">

                    {/* <!--DISPLAYS THE BOARD ID--> */}

                    {/* {{!--
        <ul>
            <li>
                <h4 id="boardID">Board ID: {{board.id}}</h4>
            </li>
        </ul> --}}
        <!--NAV MENU--> */}

                    <ul>
                        <h1 id="boardNameFull" data-boardId={{ board: id }}>{{ board: name }}</h1> {/* Changed board.id to board:id and board.name to board:name */}
                    </ul>

                    {/* <!--DROPDOWN FOR ADDING--> */}

                    <div className="btn-group smallAdd" role="group" aria-label="Button group with nested dropdown">
                        <div className="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" className="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i className="fas fa-plus-circle"></i>
                            </button>

                            {/* <!-- MENU ITEMS FOR TAGS, BOOKMARKS & ANNOUNCE--> */}

                            <div className="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a className="dropdown-item">
                                    <ul>

                                        <li style={{listStyleType: none, marginLeft: -35, fontSize: 20}}>
                                            <button type="button" style={{width:155,color:white}} className="btn filterBtn">
                                                <i className="fas fa-tags"></i>
                                                Tags
                                </button>
                                        </li>
                                        <li style={{listStyleType: none, paddingRight: 30, fontSize: 20}}>
                                            <button type="button" style={{width:155}} className="btn newLink2" data-toggle="modal" data-target="#postModal">
                                                <i className="fas fa-bookmark"></i>
                                                Bookmarks
                                </button>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                    </div>

                    {/* <!--ALERTS AND FILTER BUTTONS--> */}


                    <ul>
                        <a id="close" href="#">
                            <button type="button" style={{width:155,color:white}} className="btn filter">
                                <i className="fas fa-times"></i>
                            </button>
                        </a>
                        <a id="filter" href="#">
                            <li style={{listStyleType: none, paddingRight: 30, fontSize: 20}}>
                                <button type="button" style={{width:155,color:white}} className="btn filter">
                                    <i className="fas fa-tags"></i>
                                    Tags
                    </button>
                            </li>
                        </a>
                        <li id="bookmark" style={{listStyleType: none, paddingRight: 30, fontSize: 20}}>
                            <button type="button" style={{width:155}} className="btn newLink" data-toggle="modal" data-target="#postModal">
                                <i className="fas fa-bookmark"></i>
                                Add Bookmark
                </button>
                        </li>
                    </ul>
                    <ul className="menuRight">
                        <li>
                            <a id="close" href="#">
                                <i className="fas fa-times"></i>
                            </a>
                            {/* {{!--
                <a id="filter" href="#">
                    Filter
                    <i className="fas fa-filter"></i>
                </a> --}} */}
                            <a id="closeAnn" href="#">
                                <i className="fas fa-times"></i>
                            </a>

                            <a id="announce" href="#">
                                Announcements
                    <i className="fas fa-external-link-square-alt"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

        );
    }
}

if (document.getElementById('navbar')) {
    ReactDOM.render(<Navar />, document.getElementById('navbar'));
}
