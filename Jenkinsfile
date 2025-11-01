pipeline {
    agent any

    environment {
        DOCKER_IMAGE = "hussein/healthrwanda_webapp:latest"
    }

    stages {
        stage('Build') {
            steps {
                echo "Build stage is running"
                script {
                    // Build Docker image from Dockerfile
                    sh 'docker build -t $DOCKER_IMAGE .'
                }
            }
        }

        stage('Deploy') {
            steps {
                echo "Deploy stage is running"
                script {
                    // Stop existing container (if any)
                    sh 'docker rm -f healthrwanda_webapp || true'
                    // Run container
                    sh 'docker run -d -p 8000:80 --name healthrwanda_webapp $DOCKER_IMAGE'
                }
            }
        }
    }

    post {
        success {
            echo "Pipeline completed successfully!"
        }
        failure {
            echo "Pipeline failed. Check logs for details."
        }
    }
}
