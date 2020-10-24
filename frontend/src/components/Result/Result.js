import React from 'react';
import { Link } from 'react-router-dom';
import './Result.scss';

const Result = ({ Artist, Album, Plays, Slug, Img }) => {
    
    const TheAlbum = () => {
        if (Album) {
            return (
                <div className="item-title">{ Album }</div>
            )
        }
        return null;
    }

    const TheArtist = () => {
        if (Album) {
            return (
                <div className="artist-title">{ Artist }</div>
            )
        }
        return (
            <div className="item-title">{ Artist }</div>
        );
    }

    const PlayCount = () => {
        if (!Plays) {
            return (
                <div className="playCount">0 Plays</div>
            )
        }
        return (
            <div className="playCount">{ Plays } Plays</div>
        )
    }

    const TheSlug = () => {
        if (Album) {
            return `/albums/${Slug}`
        }
        return `/artists/${Slug}`
    }

    const TheImage = () => {
        if (Img && Album) {
            return <img className="result-img" alt={Artist} src={require(`../../assets/images/albums/${Slug}.jpg`)} /> }
        else if (Img) {
            return <img className="result-img" alt={Artist} src={require(`../../assets/images/artists/${Slug}.jpg`)} />
        } else {
            return <img className="result-img" alt={Artist} src={require(`../../assets/images/artists/blank.jpg`)} />;
        }
    }

    return (
        <div className="result">
        <Link to={TheSlug}>
            <TheImage />
            <TheAlbum />
            <TheArtist />
            <PlayCount />
        </Link>
        </div>
    )
}

export default Result;