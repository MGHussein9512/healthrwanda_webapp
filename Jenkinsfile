pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                echo 'Build stage is running'
                sh 'docker-compose build'
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploy stage is running'
                sh 'docker-compose up -d'
            }
        }
    }
}
